import React from 'react';

import Brand from './Brand';
import Navigation from './Nav';
import Title from './Title';

import './header.scss'

const Header = () => (
    <div className="cdtl_header">
        <Navigation />
        <Title />
    </div>
);

export default Header;
