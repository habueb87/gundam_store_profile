import React from 'react';

const Navbar = () => {
  return (
    <nav className="navbar sticky-top navbar-expand-lg navbar-dark pt-3 pb-3" style={{ backgroundColor: '#2F2963' }}>
      <div className="container">
        <a className="navbar-brand" href="/home">
          <img className="" src='img/logowhite.png' alt="" width="100%" height="50" />
        </a>
        <button
          className="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span className="navbar-toggler-icon"></span>
        </button>
        <div className="collapse navbar-collapse" id="navbarSupportedContent">
          <ul className="navbar-nav mx-auto mb-2 mb-lg-0">
            <li className="nav-item">
              <a className="fw-bold nav-link" href="#">
                Home
              </a>
            </li>
            <li className="nav-item">
              <a className="fw-bold nav-link" href="#about">
                About
              </a>
            </li>
            <li className="nav-item">
              <a className="fw-bold nav-link" href="#contact">
                Contact
              </a>
            </li>
          </ul>
          <a href="/admin/dashboard" className="btn rounded-pill me-4 text-dark" role="button" style={{ backgroundColor: '#FFFFFF' }}>
            <small className="fw-normal px-4">Go to Admin</small>
          </a>
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
