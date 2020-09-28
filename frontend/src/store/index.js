// import mandatory for store
import { createStore, applyMiddleware } from 'redux';
import { composeWithDevTools } from 'redux-devtools-extension';

// import RootReducer
import reducer from 'src/reducers';

// we need to import middleware
import menuMiddleware from 'src/middlewares/menuMiddleware';
import informationMiddleware from 'src/middlewares/informationMiddleware';
// import pushMiddleware from '../middlewares/pushMiddleware';


// combine devtools and middleware
const enhancers = composeWithDevTools(
  applyMiddleware(
    menuMiddleware,
    informationMiddleware,
    // pushMiddleware,
  ),
);

const store = createStore(
  reducer,
  enhancers,
);

export default store;
