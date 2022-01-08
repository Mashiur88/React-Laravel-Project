import React from "react";
import axios from "axios";
import { Link } from "react-router-dom";
import { useState,useEffect } from "react";

const AccountInfolist = () =>
{    const[list, setList] = useState([]);

    useEffect(()=>{
        axios.get("/employee/Accountinfo")
        .then(response=>{
            setList(response.data);
        }).catch(error=>{
            console.log(error);
        });
    }, []);

    return(
        <div>
        <h2>Account Info:</h2>
        <table className="table table-responsive" style={{ marginLeft: "auto", marginRight: "auto"}}>
            <tr style={{ fontSize: "25px" }}>
                <th>Accountid</th>
                <th>Accountname</th>
                <th>Accounttype</th>
                <th>Balance</th>
                <th>AccountState</th>
                <th></th>
            </tr>
            {list.map(i=>(
        <tr>
            
            <td><h3>{i.id}</h3></td>
            <td><h3>{i.accountname}</h3></td>
            <td><h3>{i.accounttype}</h3></td>
            <td><h3>{i.accountbalance}</h3></td>
            <td><h3>{i.accountstate}</h3></td>
            <td><Link to={["/employee/Accountinfo/document/", i.id].join("")}><button className="btn btn-outline-info">Document</button></Link></td>
        </tr>
           ))}
        </table>
        </div>
    );
}
export default AccountInfolist;