import React from 'react';
// import TheCarousel from '../TheCarousel';

import './presentation.scss';


const Presentation = ({ presentation }) => {
  return (
    <div className="presentation_container">
      <h1 id="Notre_Histoire" className="cdtl_presentation_Maintitle">Notre Histoire</h1>
      <div className="cdtl_presentation">
        <div className="cdtl_presentation_header">
          <h1 className="cdtl_presentation_title">Il etait une fois ...</h1>
        </div>
        <div className="cdtl_presentation_description">
          <p>
              {presentation[0].description}
          </p>
        </div>
      </div>
      {/* <TheCarousel /> */}
    </div>
  );
};

export default Presentation;
