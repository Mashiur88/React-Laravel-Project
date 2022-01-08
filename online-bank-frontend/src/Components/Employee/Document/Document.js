import React from "react";
import { useState,useEffect } from "react";

const Document = () =>
{
    const handleSubmit = () =>
    {
        
    }
    return(
        <div>
            <form method='post' onSubmit={handleSubmit}>
                <img src="" alt='document' width="250" height="250"/><br/>
                <label for="loanstatus">Select the loan status:</label><br/>
                <select id="loanstatus" name="loanstatus" >
                    <option value="ACCEPTED">ACCEPTED</option>
                    <option value="FORWARDED">FORWARDED</option>
                    <option value="REJECTED">REJECTED</option>
                </select><br/>

                <input type="submit" name="submit" value="update"/>
            </form>
        </div>
    );
}
export default Document;