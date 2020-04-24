import React from 'react';
import ReactDOM from 'react-dom';

function Encab() {
    return (

       <>

        <div className="alert alert-secondary" role="alert">
            <h2 className="text-center">¡BIENVENIDO(A) A NUESTRO SISTEMA DE GESTIÓN!</h2>
            <h5 className="lead text-center">Registrate o inicia sesión</h5>
        </div>
       </>


    );
}

export default Encab;

if (document.getElementById('encab')) {
    ReactDOM.render(<Encab />, document.getElementById('encab'));
}

