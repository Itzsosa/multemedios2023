import React from 'react';
import logo from '../logo.svg';
import './dashboard.css'

class Dashboard extends React.Component {
  constructor(props) {
    super(props);
  }
  state = {}
  render() {
    return (
      <div className='container'>
        <h1 className='labelsosa'>Built by Sosa</h1>
        <div className="logo-container">
          <img src={logo} className="App-logo" alt='logo' />
        </div>
      </div>
    );
  }
}

export default Dashboard;
