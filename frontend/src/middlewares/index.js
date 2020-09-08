import axios from 'axios';

const XXXMiddleware = (store) => (next) => (action) => {
  //console.log('on a intercepté une action dans le middleware: ', action);
  switch (action.type) {
    case : {


      axios({

      })
        .then((response) => {

        })
        .catch((error) => {
          console.warn(error);
        })
        .finally(() => {
        });
      next(action);
      break;
    }
    default:
    // on passe l'action au suivant (middleware suivant ou reducer)
      next(action);
  }
};

export default XXXMiddleware;
