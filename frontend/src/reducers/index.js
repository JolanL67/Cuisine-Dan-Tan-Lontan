import { combineReducers } from 'redux';

// Reducer import
import menuReducer from './menuReducer';
import informationReducer from './informationReducer';

const rootReducer = combineReducers({
  menu: menuReducer,
  information: informationReducer,
});


export default rootReducer;
