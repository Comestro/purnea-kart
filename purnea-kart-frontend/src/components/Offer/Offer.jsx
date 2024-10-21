 

import React from 'react'
import Products from '../Products/Products'

function Offer() {
  return (
    <div className='w-full flex space-x-3'>
        <div className='w-[80%]'>
         <Products/>
        </div>
        <div className='w-[18%] h-88 mt-3 bg-slate-600 '>
            <img src='/public/assets/offer.avif'
            className='h-full'></img>
        </div>
        
         
    </div>
  )
}

export default Offer