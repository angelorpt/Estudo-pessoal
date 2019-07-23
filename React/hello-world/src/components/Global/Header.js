import React from 'react';
import logo  from './images/logo.svg';
import            './css/Header.css';


class Header extends React.Component{
    render() {
        return (
            <header className="Header">
                <img src={logo} className="Logo" alt="logo"/>
                <h2>Hello World React</h2>
            </header>
        );
    }
}

export default Header;