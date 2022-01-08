import React from "react";
import { Link } from "react-router-dom";

const Navbar = () =>
{   const id=1;
    //localStorage.getItem('empid');
    return(
        <div>
            <Link to="/employee/dashboard"><button>Dashboard</button></Link>
            <Link to={['/employee/profile/'+id].join("")}><button>ViewProfile</button></Link>
            <Link to={["/employee/edit/"+id].join("")}><button>EditProfile</button></Link>
            <Link to="/employee/loanrequests"><button>LoanRequest</button></Link>
            <Link to="/employee/Accountinfo"><button>AccountList</button></Link>
            <Link to="/employee/news"><button>News</button></Link>
            <Link to="/employee/logout"><button>Logout</button></Link>
        </div>
    );
}
export default Navbar;