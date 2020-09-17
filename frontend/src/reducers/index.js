import { combineReducers } from 'redux';

// Reducer import
import menuReducer from './menuReducer';
import userReducer from './userReducer';
import informationReducer from './informationReducer';

const rootReducer = combineReducers({
  menu: menuReducer,
  user: userReducer,
  information: informationReducer,
});


export default rootReducer;
