import React from 'react';
import Hero from '../components/Hero';
import Navbar from '../components/Navbar';
import Card from '../components/Card';
import Contact from '../components/Contact';
import About from '../components/About';


const Home = () => {
    return (
        <div className='main'>
            <Navbar />
            <Hero />
            <Card />
            <About />
            <Contact />
        </div>
    );
}

export default Home;
