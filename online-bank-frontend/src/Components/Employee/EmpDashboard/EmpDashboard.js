import React from "react";

const EmpDashboard = () =>
{
    const id=1;
    //localStorage.getItem('empid'); 
    return(
        <div>
            <span>Hi <b>{id}</b></span><br/>
            <strong>Welcome To employee dashboard</strong>
        </div>
    );
}
export default EmpDashboard;
