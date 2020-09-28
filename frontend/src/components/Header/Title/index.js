import React from 'react';

import './title.scss';
import Fade from 'react-reveal/Fade';
import Flip from 'react-reveal/Flip';

const Title = () => (
  <>
    <div className="cdtl_homepage_title">
      <Fade top cascade duration={1800}>
        <div className="cdtl_homepage_text">
          Cuisine Dan Tan Lontan 974
        </div>
      </Fade>
      <Flip bottom cascade duration={1800}>
        <div className="cdtl_homepage_para">
          <p>Un savoir faire unique, des produits de qualité,</p>
          <p>et une passion pour notre terre, la Réunion !</p>
        </div>
      </Flip>
   
    </div>
  </>
);

export default Title;
