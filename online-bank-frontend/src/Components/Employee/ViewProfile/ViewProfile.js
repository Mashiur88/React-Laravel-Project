import React from "react";
import { useParams } from "react-router-dom";
import { useEffect,useState } from "react";
import axios from "axios";

const ViewProfile = () =>
{
    const {id : did} = useParams();
    const [emp,setEmp] = useState([]);
    const [bank,setBank] = useState([]);

    useEffect(()=>{
        axios.get("/employee/profile/"+did)
        .then(response=>{
            setEmp(response.data.employee);
            setBank(response.data.bankuser);
        }).catch(error=>{
            console.log(error);
        });
    }, []);

    return(
        <div>
            <h3>Employee Profile:</h3>
                <p>UserName:{emp.empname}</p>
                <p>FirstName:{bank.firstname} </p>
                <p>LastName: {bank.lastname}</p>
                <p>Gender: {bank.gender}</p>
                <p>Date of Birth: {bank.dateofbirth}</p>
                <p>Phone: {bank.phone}</p>
                <p>Email: {bank.email}</p>
                <p>NID: {bank.nid}</p>
        </div>
    );
}
export default ViewProfile;