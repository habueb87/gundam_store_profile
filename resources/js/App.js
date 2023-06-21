import React from 'react';
import { createRoot } from 'react-dom/client';
import Welcome from './pages/Welcome';
import Home from './pages/Home';

require('./bootstrap');

const App = () => {
    page = window.page;
    console.log(page);
    if (page === 'Welcome'){
        return (
            <Welcome />
        );
    } else if (page === 'Home'){
        return(
            <Home />
        );
    }

}

createRoot(document.getElementById('root')).render(<App />);
