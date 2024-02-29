import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import {EmployeeTable} from './tables';

import {Modal} from './modax';
import reportWebVitals from './reportWebVitals';
import {SelectRole} from "./BEcomponents";


try {
  ReactDOM.render(
    <Modal title={"LOGIN FAILED"} icon={"⚠️"} copies={"Account not found, Please login again"} />,
    document.getElementById('loginInvalid')
  );
} catch (error) {
  console.log(error);
}

try {
  ReactDOM.render(
    <Modal title={"Data added successfully"} icon={"✔️"} copies={"record will be automatically generated on the table"} />,
    document.getElementById('successModax')
  );
} catch (error) {
  
}

try {
  ReactDOM.render(
    <EmployeeTable />,
  document.getElementById('employeeTable')
  );
} catch (error) {
  console.log(error);
}

try {
  ReactDOM.render(
    <SelectRole />,
    document.getElementById("selector")
  ) 
  
} catch (error) {
  console.log(error);
}

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
