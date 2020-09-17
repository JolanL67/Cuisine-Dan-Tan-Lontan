import React from 'react';
import FacebookIcon from '@material-ui/icons/Facebook';
import InstagramIcon from '@material-ui/icons/Instagram';

import './footer.scss';

const Footer = () => (
  <>
    <div className="cdtl_footer">
      <h1 className="cdtl_footer_title">Contact</h1>
      <div className="cdtl_footer_contact">
        <div className="cdtl_footer_diver_info">
          <p><span>Information :</span></p>
          <p>Conditions de livraison, delais de livraison, moyens de paiement</p>
        </div>
        <div className="cdtl_footer_contact_info">
          <p><span>Coordonnées</span></p>
          <p><span>Adresse :</span> 13011 Marseille</p>
          <p><span>Tel :</span> 06.01.02.03.04</p>
          <p><span>@mail :</span> CuisineLontan974@gmail.com</p>
          <p><span>Facebook : </span> Cuisine Dan Tan Lontan 974</p>
          <p><span>Instagram :</span> Cuisine Dan Tan Lontan 974</p>
        </div>
      </div>
    </div>
    <div className="cdtl_footer_social">
      <InstagramIcon fontSize="large" />
      <FacebookIcon fontSize="large" />
    </div>
    <div className="cdtl_footer_copyright">
      <h6>-Copyright un lien vers nos github peut etre-</h6>
    </div>
  </>
);

export default Footer;
