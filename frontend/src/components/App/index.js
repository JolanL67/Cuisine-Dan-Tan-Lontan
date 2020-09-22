// == Import npm
import React, { useEffect } from 'react';

// == Import
import Menu from 'src/containers/Menu';
import Header from '../Header';
import Presentation from '../Presentation';
import Footer from '../Footer';
import Form from '../Form';
import Loader from '../Loader';

import './app.scss';


// == Composant
const App = ({ getAllMeal, getPresentation, presentation, meals, loading}) => {
  useEffect(() => {
    getAllMeal();
    getPresentation();
  }, []);
console.log(meals);
  return (
    <div className="cdtl_app">
      {loading && <Loader />}
      {!loading && (
        <>
          <Header />
          <Presentation presentation={presentation} />
          <Menu />
          <Form />
          <Footer />
        </>
      )}
    </div>
  );
};


// == Export
export default App;
