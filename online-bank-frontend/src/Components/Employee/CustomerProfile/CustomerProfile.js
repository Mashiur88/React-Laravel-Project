import React from "react";

const CustomerProfile = () =>
{
    return(
        <div>
            <form method='post' action="/employee/Accountinfo/document/{{$account->id}}">
        <img src="{{URL('storage/employee/'.$account->accountdocument)}}" alt='document' width="250" height="250"/><br/>
            <label for="accountstate">Select the loan status:</label><br/>
            <select id="accountstate" name="accountstate" >
                <option value="ACTIVE">ACTIVE</option>
                <option value="INACTIVE">INACTIVE</option>
            </select><br/>       
            <input type="submit" name="submit" value="update"/>
            </form>
        </div>
    );
}
export default CustomerProfile;