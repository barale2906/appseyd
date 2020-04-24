import React from 'react';
import ReactDOM from 'react-dom';

function Header() {
    return (
        <div className="text-black-50"></div>
    );
}

export default Header;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('header'));
}

