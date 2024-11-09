import React from 'react'
import { PiStorefront } from "react-icons/pi";
function Seller() {
  return (
    <div>
      <button className='flex space-x-2 items-center'>
        <PiStorefront />
        <p>Become a Seller</p> 
      </button>
    </div>
  )
}

export default Seller