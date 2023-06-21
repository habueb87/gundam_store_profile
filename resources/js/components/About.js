import React from 'react';

const About = () => {
  return (
    <div className="bg-dark text-light" id="about">
      <div className="container pt-5">
        <div className="text-center">
          <h1>About Us</h1>
          <p>Get to know the team behind our store.</p>
        </div>

        <div className="text-center">
          <div className="d-flex align-items-center justify-content-center flex-column">
            <img
              src="/img/owner.png"
              className="mr-4"
              alt="Owner"
              style={{ width: '150px' }}
            />
            <div>
              <h5 className="card-title">Satria "Zett" Alief</h5>
              <p className="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id
                fermentum nulla. Morbi accumsan ultrices ante, ut posuere justo
                bibendum et. Sed non lectus eu lorem fermentum tincidunt vitae
                ut erat.
              </p>
              <p className="card-text">Email: satriaaliefpratama@gmail.com</p>
              <p className="card-text">Phone: +62 813-8220-9335</p>
            </div>
          </div>
          <br />
          <div className="mt-4">
            <div
              className="jumbotron jumbotron-fluid text-center"
              style={{
                backgroundImage: `url('/img/banner2.png')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
                padding: '50px',
                marginBottom: '0',
                borderRadius: '15px',
              }}
            >
              <h2 className="display-6">We're passionate about Gunpla!</h2>
              <p className="lead">
                Visit our store to explore our wide selection of Gunpla models and accessories.
              </p>
            </div>
          </div>
          <br />
          <div className="mt-4">
            <div
              className="jumbotron jumbotron-fluid text-center"
              style={{
                backgroundImage: `url('/img/banner3.png')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
                padding: '50px',
                marginBottom: '0',
                borderRadius: '15px',
              }}
            >
              <h2 className="display-6">Discover the Gunpla world!</h2>
              <p className="lead">
                Immerse yourself in the fascinating world of Gunpla with our diverse collection of models and accessories.
              </p>
            </div>
          </div>
          <br />
          <div className="mt-4">
            <div
              className="jumbotron jumbotron-fluid text-center"
              style={{
                backgroundImage: `url('/img/banner4.jpg')`,
                backgroundSize: 'cover',
                backgroundPosition: 'center',
                padding: '50px',
                marginBottom: '0',
                borderRadius: '15px',
              }}
            >
              <h2 className="display-6">Join our Gunpla community!</h2>
              <p className="lead">
                Connect with fellow Gunpla enthusiasts, share your creations, and stay updated with the latest trends.
              </p>
            </div>
          </div>
          <br />
        </div>
      </div>
      <div style={{ height: '100px' }}></div> {/* Added space at the bottom */}
    </div>
  );
};

export default About;
