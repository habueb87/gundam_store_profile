import React from 'react';

const CardSection = () => {
  const cardData = window.card; // Assuming window.card contains an array of card data

  return (
    <div style={{ backgroundColor: '#DAF7DC' }} id="card">
      <div className="container pt-5">
        <div className="text-center px-5 mx-5">
          <h1 style={{ fontWeight: 'bold' }}>Some Gundam That We Sell</h1>
          <p>Lorem ipsum ppppppp pp p pppppppp p p ppppp.</p>
        </div>
        <br /><br />
        <div className="row row-cols-1 row-cols-md-4 g-3">
          {cardData.map((data, index) => (
            <div className="card d-flex" style={{ width: '18rem', marginLeft: '20px' }} key={index}>
              <img src={data.img} className="card-img-top flex-grow-1 py-2" alt="..." />
              <div className="card-body px-5 py-5">
                <h5 className="card-title">{data.name}</h5>
                <p className="card-text">{data.series}</p>
                <p className="card-text">{data.desc}</p>
              </div>
            </div>
          ))}
        </div>
        <br /><br />
      </div>
    </div>
  );
};

export default CardSection;
