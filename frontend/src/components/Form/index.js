import React from 'react';


import './form.scss';
import Cart from 'src/containers/Cart';


const Form = () => (

  <div className="contact">
    <h1 id="Commande" className="contact_title">Votre commande</h1>
    <p className="contact_info">Les élements suivi du symbole (*) sont requis pour le bon déroulement de la commande</p>
    <form action="" className="contact_form">
      <div className="contact_form_name_items" >
        <input type="text" className="contact_form_name_items_lastname" placeholder="Nom*"/>
        <input type="text" className="contact_form_name_items_firstname" placeholder="Prénom*"/>
      </div>
      <div className="contact_form_adress_items">
        <input type="text" className="contact_form_adress_items_adress" placeholder="Adresse*"/>
      </div>
      <div className="contact_form_contact_items">
        <input type="number" className="contact_form_contact_phone" placeholder="Téléphone*"/>
        <input type="email" className="contact_form_contact_email" placeholder="Email*"/>
      </div>
      <div className="contact_description">
        <textarea className="contact_description_text" name="description" id="" cols="30" rows="10" placeholder="Description*" />
      </div>
    </form>
    <Cart />
    <button className="contact_button" type="submit">Commander</button>
  </div>

);

export default Form;
