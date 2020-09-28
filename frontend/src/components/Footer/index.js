import React from 'react';
import FacebookIcon from '@material-ui/icons/Facebook';
import InstagramIcon from '@material-ui/icons/Instagram';

import './footer.scss';

const Footer = ({ contact }) => (
  <>
    <div className="cdtl_footer">
      <h1 id="Contact-info" className="cdtl_footer_title">Contact</h1>
      <div className="cdtl_footer_contact">
        <div className="cdtl_footer_diver_info">
          <p><span>Information :</span></p>
          <p>Conditions de livraison, delais de livraison, moyens de paiement</p>
        </div>
        <div className="cdtl_footer_contact_info">
          <p><span>Coordonnées</span></p>
          <p><span>Adresse :</span> 13011 Marseille</p>
          <p><span>Tel :</span> {contact[0].phone}</p>
          <p><span>@mail :</span> {contact[0].mail}</p>
          <p><span>Facebook : </span> <a href={contact[0].facebook} target="_blank" rel="noopener noreferrer">Cuisine Dan Tan Lontan 974</a></p>
          <p><span>Instagram :</span> <a href={contact[0].instagram} target="_blank" rel="noopener noreferrer">Cuisine Dan Tan Lontan 974</a></p>
        </div>
      </div>
    </div>
    <div className="cdtl_footer_social">
      <a href={contact[0].instagram} target="_blank" rel="noopener noreferrer"><InstagramIcon fontSize="large" /></a>
      <a href={contact[0].facebook} target="_blank" rel="noopener noreferrer"><FacebookIcon fontSize="large" /></a>
    </div>
    <div className="cdtl_footer_copyright">
      <h6>-Copyright un lien vers nos github peut etre-</h6>
    </div>
  </>
);

export default Footer;
