import React, { useState, useEffect } from 'react';


function EmployeeTable(){
    const [query, setQuery] = useState('');
  const [results, setResults] = useState([]);


  useEffect(() => {
    searchNow("");
}, []);

  const handleSearch = async (event) => {
    const searchQuery = event.target.value; // This seearchQuery should be pass on searchnow as object, we can pass it as string using {} eg. searchNow({searchQuery})
    searchNow(searchQuery);
  };

  const searchNow = async(searchQuery) =>{
    setQuery(searchQuery);
    try {
      const response = await fetch(`/api/employee?q=${searchQuery}`); // always remember you need to add / before the route url
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      const data = await response.json();
      setResults(data);
    } catch (error) {
      console.error('Error fetching search results:', error);
    }
  }

  const toDelete =({val})=>{
    var conf = confirm("are you sure to delete selected data?");
    if(conf==true){window.location.href = "/api/deleteEmployee?q="+val;}
    
  }

    return(<div className="col-lg-12 grid-margin stretch-card">
                <div className="card">
                  <div className="card-body">
                    <h4 className="card-title">Hoverable Table</h4>
                    <p className="card-description"> <div className="form-group">
                      <div className="col-lg-4 grid-margin stretch-card">
                      <div className="input-group">
                        <input type="text" className="form-control" onChange={handleSearch} placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2"></input>
                        <div className="input-group-append">
                          <button className="btn btn-sm btn-primary" type="button">Search</button>
                        </div>
                      </div>
                      </div>
                    </div>
                    </p>
                    <div className="table-responsive">
                      <table className="table table-hover">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Fullname</th>
                            <th>Role</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Hire Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          {
                            results.map((column) =>
                                <tr>
                            <td><button className='btn btn-danger' type='button' onClick={() => toDelete({ val: column.user_id })}>X</button></td>
                            <td>{column.full_name}</td>
                            <td>{column.role_desc}</td>
                            <td>{column.contact}</td>
                            <td>{column.username}</td>
                            <td>{column.hire_date}</td>
                            
                                </tr>
                            )
                          }
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>);
}



export {EmployeeTable};