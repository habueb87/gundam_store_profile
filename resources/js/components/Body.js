// Body.js
import React from 'react';

const Body = () => {
    const gundam = window.gundam;
  return (
    <div className="body">
      <p>Dony Ganteng</p>
      <div className="row justify-content-center">
                {gundam.map((gundam) => (
                    <div className="col-md-8 mb-2" key={gundam.id}>
                        <div className="card">
                            <div className="card-header">{gundam.name}</div>
                            <div className="card-body">{gundam.series}</div>
                        </div>
                    </div>
                ))}
            </div>
    </div>
  );
};

export default Body;
