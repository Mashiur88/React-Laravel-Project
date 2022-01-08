import {BrowserRouter as Router, Route, Switch} from 'react-router-dom';
import EmpDashboard from './Components/Employee/EmpDashboard/EmpDashboard';
import Edit from './Components/Employee/Edit/Edit';
import CustomerProfile from './Components/Employee/CustomerProfile/CustomerProfile';
import Document from './Components/Employee/Document/Document';
import AccountInfolist from './Components/Employee/AccountInfolist/AccountInfolist';
import ViewProfile from './Components/Employee/ViewProfile/ViewProfile';
import LoanRequestList from './Components/Employee/LoanRequestList/LoanRequestList';
import CreateNews from './Components/Employee/CreateNews/CreateNews';
import Navbar from "./Components/Employee/Navbar/Navbar";
import Footer from "./Components/Employee/Footer/Footer";

function App() {
  return (
    <div className="App" style={{textAlign:'center'}}>
      
      <Router>
      <Navbar/>
      <Switch>

        <Route exact path="/employee/dashboard">
          <EmpDashboard/>
        </Route>

        <Route exact path="/employee/edit/:id">
          <Edit/>
        </Route>

        <Route exact path="/employee/profile/:id">
          <ViewProfile/>
        </Route>

        <Route exact path="/employee/loanrequests">
          <LoanRequestList/>
        </Route>

        <Route exact path="/employee/loanrequests/document/:id">
          <Document/>
        </Route>

        <Route exact path="/employee/news">
          <CreateNews/>
        </Route>

        <Route exact path="/employee/Accountinfo">
          <AccountInfolist/>
        </Route>

        <Route exact path="/employee/Accountinfo/document/:id">
          <CustomerProfile/>
        </Route>       
      </Switch>
       <Footer/>
    </Router>
    </div>
  );
}

export default App;
