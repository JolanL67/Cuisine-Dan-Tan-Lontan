import React from 'react';

import './loader.scss';

const Loader = () => (
  <div className="divLoader">
    <div className="wrapper">
      <div className="circle" />
      <div className="circle" />
      <div className="circle" />
      <div className="shadow" />
      <div className="shadow" />
      <div className="shadow" />
      <span>Loading</span>
    </div>
  </div>
);

export default Loader;
