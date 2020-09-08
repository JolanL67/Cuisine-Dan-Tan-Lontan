// import mandatory for store
import { createStore, applyMiddleware } from 'redux';
import { composeWithDevTools } from 'redux-devtools-extension';

// we need to import middleware

// import RootReducer
import reducer from 'src/reducers';

// combine devtools and middleware
const enhancers = composeWithDevTools(
  applyMiddleware(
    // add middleware
  ),
);

const store = createStore(
  reducer,
  enhancers,
);

export default store;
