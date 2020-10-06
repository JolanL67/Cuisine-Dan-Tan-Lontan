// == Import npm
import React, { useEffect } from 'react';

// == Import
import Menus from 'src/containers/Menus';
import Footer from 'src/containers/Footer';
import Form from 'src/containers/Form';
import Header from '../Header';
import Presentation from '../Presentation';
import Loader from '../Loader';

import './app.scss';

import Fade from 'react-reveal/Fade';



// == Composant
const App = ({
  getContact,
  getAllMeal,
  getPresentation,
  presentation,
  loadingDescription,
  loadingMenu,
  loadingContact,
}) => {
  useEffect(() => {
    getContact();
    getAllMeal();
    getPresentation();
  }, []);

  return (
    <div className="cdtl_app">
      {loadingDescription && <Loader />}
      {!loadingDescription && (
        <>
          <Header />
          <Presentation presentation={presentation} />
        </>
      )}
      {loadingMenu && <Loader />}
      {!loadingMenu && (
        <>
          <Fade bottom>
            <Menus />
          </Fade>
          <Form />
        </>
      )}
      {loadingContact && <Loader />}
      {!loadingContact && (
        <>
          <Footer />
        </>
      )}
    </div>
  );
};


// == Export
export default App;
