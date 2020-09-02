import React from 'react';
import FacebookIcon from '@material-ui/icons/Facebook';
import TwitterIcon from '@material-ui/icons/Twitter';

import './footer.scss';

const Footer = () => (
  <>
    <div className="cdtl_footer">
      <h1 className="cdtl_footer_title">Contact</h1>
      <div className="cdtl_footer_contact">
        <div className="cdtl_footer_adress">
          <p>Adresse :</p>
          <p>13011 Marseille</p>
        </div>
        <div className="cdtl_footer_map">
          <div> </div>
        </div>
        <div className="cdtl_footer_info">
          <p>Coordonnées</p>
          <p>Tel : 06.01.02.03.04</p>
          <p>@mail : cdtl@gmail.com</p>
          <p>Facebook : cdtl974</p>
          <p>Twitter : Cdtl-974</p>
        </div>
      </div>
    </div>
    <div className="cdtl_footer_social">
      <TwitterIcon fontSize="large" />
      <FacebookIcon fontSize="large" />
    </div>
    <div className="cdtl_footer_copyright">
      <h6>-Copyright un lien vers nos github peut etre-</h6>
    </div>
  </>
);

export default Footer;
