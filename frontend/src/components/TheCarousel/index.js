import React, { ReactDOM } from 'react';
import makeCarousel from 'react-reveal/makeCarousel';
// we'll need the Slide component for sliding animations
// but you can use any other effect
import Slide from 'react-reveal/Slide';
// we'll use styled components for this tutorial
// but you can use any other styling options ( like plain old css )
import styled, { css } from 'styled-components';

import './carousel.scss';


const TheCarousel = () => {
  const width = '100%';
  const height = '600px';
  const Container = styled.div`
    border-top: 5px solid white;
    border-bottom: 5px solid white;
    position: relative;
    overflow: hidden;
    width: ${width};
    text-align: center;
  `;
  const Children = styled.div`
    width: ${width};
    position: relative;
    height: ${height};
  `;
  const Arrow = styled.div`
    text-shadow: 1px 1px 1px #fff;
    z-index: 100;
    line-height: ${height};
    text-align: center;
    position: absolute;
    top: 0;
    width: 10%;
    font-size: 3em;
    cursor: pointer;
    user-select: none;
    ${props => props.right ? css`left: 90%;` : css`left: 0%;`}
  `;
  const Dot = styled.span`
    font-size: 5em;
    cursor: pointer;
    text-shadow: 1px 1px 1px #fff;
    user-select: none;
  `;
  const Dots = styled.span`
    text-align: center;
    width: ${width};
    z-index: 100;
    position: relative;
  `;
  const CarouselUI = ({ position, total, handleClick, children }) => (
    <Container>
      <Children>
        {children}
        <Arrow onClick={handleClick} data-position={position - 1}>{'<'}</Arrow>
        <Arrow right onClick={handleClick} data-position={position + 1}>{'>'}</Arrow>
      </Children>
      <Dots>
        {Array(...Array(total)).map( (val, index) => (
          <Dot key={index} onClick={handleClick} data-position={index}>
            {index === position ? '● ' : '○ ' }
          </Dot>
        ))}
      </Dots>
    </Container>
  );

  const Carousel = makeCarousel(CarouselUI);

  return (
    <Carousel>
      <Slide right>
        <img alt="nos plat" src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" className="carousel_view" />
      </Slide>
      <Slide right>
        <img alt="nos plat" src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" className="carousel_view" />
      </Slide>
      <Slide right>
        <img alt="nos plat" src="https://images.pexels.com/photos/326279/pexels-photo-326279.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" className="carousel_view" />
      </Slide>
    </Carousel>
  );
};


export default TheCarousel;
