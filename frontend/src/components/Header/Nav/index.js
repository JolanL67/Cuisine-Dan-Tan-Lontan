import React from 'react';
import Navbar from 'react-bootstrap/Navbar';
import Nav from 'react-bootstrap/Nav';


import './nav.scss';

const Navigation = () => {
  return (
    <Navbar expand="lg">
      <Navbar.Toggle aria-controls="basic-navbar-nav" />
      <Navbar.Collapse id="basic-navbar-nav">
        <Nav className="mr-auto cdtlNav">
          <Nav.Link className="cdtl_navLink" href="#link">Notre Histoire</Nav.Link>
          <Nav.Link className="cdtl_navLink" href="#link">Notre Carte</Nav.Link>
          <Nav.Link className="cdtl_navLink" href="#link">Commander</Nav.Link>
          <Nav.Link className="cdtl_navLink" href="#link">Contact</Nav.Link>
        </Nav>
      </Navbar.Collapse>
    </Navbar>
  );
};


export default Navigation;