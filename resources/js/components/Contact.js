import React from 'react';

const Contact = () => {
  return (
    <div className="container pt-5" id="contact">
      <div className="text-center" style={{ padding: '20px 0' }}>
        <h1>Contact Us</h1>
        <p>Connect with us through social media or email.</p>
      </div>

      <div className="row justify-content-center mt-5">
        <div className="col-md-6">
          <ul className="list-group list-group-horizontal justify-content-center">
            <li className="list-group-item border-0">
              <a
                href="https://www.facebook.com/example"
                target="_blank"
                rel="noopener noreferrer"
                className="text-decoration-none"
              >
                <i className="bi bi-facebook"></i>
              </a>
            </li>
            <li className="list-group-item border-0">
              <a
                href="https://www.twitter.com/example"
                target="_blank"
                rel="noopener noreferrer"
                className="text-decoration-none"
              >
                <i className="bi bi-twitter"></i>
              </a>
            </li>
            <li className="list-group-item border-0">
              <a
                href="https://www.instagram.com/example"
                target="_blank"
                rel="noopener noreferrer"
                className="text-decoration-none"
              >
                <i className="bi bi-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div className="row justify-content-center mt-4">
        <div className="col-md-6">
          <div className="d-flex align-items-center">
            <span className="me-3">
              <i className="bi bi-envelope"></i>
            </span>
            <a
              href="mailto:satriaaliefpratama@gmail.com"
              className="text-decoration-none"
            >
              satriaaliefpratama@gmail.com
            </a>
          </div>
        </div>
      </div>
      <br />
      <br />
    </div>
  );
};

export default Contact;
