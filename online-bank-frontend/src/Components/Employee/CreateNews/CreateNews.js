import axios from "axios";
import React from "react";
import { useState,useEffect } from "react";

const CreateNews = () =>
{
    const[title,setTitle] = useState("");
    const[desc,setDesc] = useState("");
    const[picture,setPicture] = useState("");

    const handleSubmit = (e) =>
    {   alert({title});
        e.preventDefault();
        

        var obj={
            "newstitle" : title,
            "newsbody" : desc,
            "newspicture" : picture
        };

        const res = axios.post('/employee/news',obj);
                if(res.obj.status === 200){
                    
                    alert('News Posted');
                }

                else if(res.obj.status === 422){
                    
                    alert(res.obj.errors);
                    
                }

                
    }

    return(
        <div>
            <h3>News Form</h3>
            <form onSubmit={handleSubmit} enctype="multipart/form-data">
                <label for="title">Enter News Title:</label><br/>
                <input type="text" name="newstitle" id="newstitle" onChange={(e) =>setTitle(e.target.value)}/><br/>
                <span>News Description:</span><br/>
                <textarea name="newsdesc" id="newsdesc" cols="20" rows="3" onChange={(e) =>setDesc(e.target.value)}></textarea><br/>
                <span>News Picture:</span><br/>
                <input type='file' name="newsPicture" id="newsPicture" onChange={(e) =>setPicture(e.target.value)}/><br/>
                <input type='submit'value="post"/>
            </form>
        </div>
    );
}
export default CreateNews;