// == Import npm
import React from 'react';

// == Import
import Header from '../Header';
import Presentation from '../Presentation';

import './app.scss';

// == Composant
const App = () => (
  <div className="cdtl_app">
    <Header />
    <Presentation />
  </div>
);

// == Export
export default App;
