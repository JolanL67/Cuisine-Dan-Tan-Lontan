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
          <h3>je suis l'adresse</h3>
        </div>
        <div className="cdtl_footer_map">
          <h3>je suis la map</h3>
        </div>
        <div className="cdtl_footer_info">
          <h3>je suis les coordonnées</h3>
        </div>
      </div>
    </div>
    <div className="cdtl_footer_social">
      <TwitterIcon fontSize="large" />
      <FacebookIcon fontSize="large" />
    </div>
    <div className="cdtl_footer_copyright">
      <h6>-Copyright @xxxx-</h6>
    </div>
  </>
);

export default Footer;
