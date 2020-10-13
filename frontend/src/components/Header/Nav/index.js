import React from 'react';
import Navbar from 'react-bootstrap/Navbar';
import Nav from 'react-bootstrap/Nav';


import './nav.scss';

const Navigation = () => {
  return (
    <Navbar expand="md">
      <div className="brand_navbar">Cuisine DTL</div>
      <Navbar.Toggle aria-controls="basic-navbar-nav" />
      <Navbar.Collapse id="basic-navbar-nav">
        <Nav className="mr-auto cdtlNav">
          <Nav.Link className="cdtl_navLink" href="#Notre_Histoire">Notre Histoire</Nav.Link>
          <Nav.Link className="cdtl_navLink" href="#Notre_Carte">Notre Carte</Nav.Link>
          <Nav.Link className="cdtl_navLink" href="#Commande">Commander</Nav.Link>
          <Nav.Link className="cdtl_navLink" href="#Contact-info">Contact</Nav.Link>
        </Nav>
      </Navbar.Collapse>
    </Navbar>
  );
};


export default Navigation;
