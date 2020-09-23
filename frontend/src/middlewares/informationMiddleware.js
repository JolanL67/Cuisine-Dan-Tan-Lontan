import axios from 'axios';
import { GET_PRESENTATION, savePresentation, GET_CONTACT, saveContact } from '../action/information';

const menuMiddleware = (store) => (next) => (action) => {
  // console.log('on a intercepté une action dans le middleware: ', action);
  switch (action.type) {
    case GET_PRESENTATION:
      axios.get('https://api.cuisinelontan974.fr/api/v1/presentation')
        .then((response) => {
         console.log(response.data);
        // je voudrais enregistrer response.data dans le state => nouvelle action
        // console.log(response);
        store.dispatch(savePresentation(response.data));
        })
        .catch((error) => {
          console.warn(error);
        });
      next(action);
      break;
      case GET_CONTACT:
        axios.get('https://api.cuisinelontan974.fr/api/v1/contact')
          .then((response) => {
           console.log(response.data);
          // je voudrais enregistrer response.data dans le state => nouvelle action
          // console.log(response);
          store.dispatch(saveContact(response.data));
          })
          .catch((error) => {
            console.warn(error);
          });
        next(action);
        break;

    default:
    // on passe l'action au suivant (middleware suivant ou reducer)
      next(action);
  }
};

export default menuMiddleware;
