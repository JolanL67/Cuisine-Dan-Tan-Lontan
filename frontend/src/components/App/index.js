// == Import npm
import React from 'react';

// == Import
import Header from '../Header';
import Presentation from '../Presentation';
import Footer from '../Footer';

import './app.scss';

// == Composant
const App = () => (
  <div className="cdtl_app">
    <Header />
    <Presentation />
    <Footer />
  </div>
);

// == Export
export default App;
