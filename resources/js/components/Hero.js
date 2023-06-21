import React from 'react';

const HeroSection = () => {
  return (
    <div className="container-full-bg" id="home">
      <div
        className="container-fluid pt-5 pl-5 pr-5 jumbotron text-white jumbotron-image shadow"
        id="headjumb"
        style={{
          backgroundImage: `url('/img/banner.jpeg')`,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
          display: 'flex',
          flexDirection: 'column',
          justifyContent: 'center',
          alignItems: 'center'
        }}
      >
        <br /><br /><br /><br /><br /><br /><br />
        <h1 className="display-3">Get Your Gunpla Now</h1>
        <p className="lead">Browse the gunpla you want by clicking the button below.</p>
        <br />
        <p>
          <a className="btn btn-lg btn-primary" href="#card" role="button">
            Browse now
          </a>
        </p>
        <br /><br /><br />
      </div>
    </div>
  );
};

export default HeroSection;
