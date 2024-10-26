import React from 'react'
import Header from './Header/Header'
import Products from './Products/Products'
import Offer from './Offer/Offer'
import Categories from './Categories/Categories'
import Brand from './Brand/Brand'
import Footer from './Footer/Footer'

function Home() {
  return (
    <div className='h-fit bg-slate-100'>
          <Header/>
          <Categories/>
          <Offer/>
          <Products/>
          <Brand/>
          <Footer/>
       </div>
  )
}

export default Home



