import React from 'react';

import './presentation.scss';

const Presentation = ({ presentation }) => {
  return (
    <>
      <h1 className="cdtl_presentation_Maintitle">Notre Histoire</h1>
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
    </>
  );
};

export default Presentation;
