import React from "react";
import axios from "axios";
import { Link } from "react-router-dom";
import { useState,useEffect } from "react";

const LoanRequestList = () =>
{    const[loan, setLoan] = useState([]);

    useEffect(()=>{
        axios.get("/employee/loanrequests")
        .then(response=>{
            setLoan(response.data);
        }).catch(error=>{
            console.log(error);
        });
    }, []);

    return(
        <div>
        <h2>Loan Request:</h2>
        <table className="table table-responsive" style={{ marginLeft: "auto", marginRight: "auto"}}>
            <tr style={{ fontSize: "25px" }}>
                <th>loanid</th>
                <th>loantype</th>
                <th>loanamount</th>
                <th>loanstatus</th>
                <th></th>
            </tr>
            {loan.map(i=>(
        <tr>
            
            <td><h3>{i.id}</h3></td>
            <td><h3>{i.loantype}</h3></td>
            <td><h3>{i.loanamount}</h3></td>
            <td><h3>{i.loanrequeststatus}</h3></td>
            <td><Link to={["/employee/loanrequests/document/", i.id].join("")}><button className="btn btn-outline-info">Document</button></Link></td>
        </tr>
           ))}
        </table>
        </div>
    );
}

export default LoanRequestList;