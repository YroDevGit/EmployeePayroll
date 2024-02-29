
import React, { useState, useEffect } from 'react';
import FetchData  from "./api";

function SelectRole() {
    const [data, setData] = useState([]);

    useEffect(() => {
        const apiKey = "/api/roles";
        FetchData({apiKey, setData});
    }, []);

return(
<div>
    <select style={{background: "#2a3038", color:"white", width:"100%"}} name="" className='form-controll' required>
        <option value="">Select Role</option>
    {data.map(column=>(
        <option value={column.role_id}>{column.role_desc}</option>   
    ))}    
    </select>                   
</div>
)

}

export {SelectRole};