import React from 'react';
import Navbar from '../Navbar';
import Footer from '../Footer/Footer'

const CartPage = () => {
  const cartItems = [
    // Example data; replace with actual data fetched from your API or store
    { id: 1, title: 'Product 1', price: 200, discount: 20, quantity: 1 },
    { id: 2, title: 'Product 2', price: 500, discount: 50, quantity: 2 },
  ];

  const calculateTotal = () => {
    return cartItems.reduce((total, item) => total + (item.price - item.discount) * item.quantity, 0);
  };

  return (
    
    <div className="">
      <Navbar
       links={[
        { label: "MyAccount", href: "/" },
        { label: "Become a Seller", href: "/seller" },
        { label: "more", href: "/contact" },
        { label: "cart", href: "/cart" },
      ]}
      variant="dark"/>
      <h1 className="text-2xl font-semibold">Shopping Cart</h1>
      
      <div className="grid md:grid-cols-3 gap-4">
        
        {/* Cart Items Section */}
        <div className="col-span-2">
          {cartItems.map(item => (
            <div key={item.id} className="border p-4 mb-4 flex justify-between items-center">
              <img src="path-to-thumbnail" alt={item.title} className="w-16 h-16" />
              <div className="flex-1 ml-4">
                <h2 className="text-lg font-semibold">{item.title}</h2>
                <p>Price: ₹{item.price} <span className="line-through text-gray-500">₹{item.price + item.discount}</span></p>
                <p>Quantity: <input type="number" value={item.quantity} min="1" className="border w-12 text-center" /></p>
                <button className="text-red-500">Remove</button> | <button>Save for later</button>
              </div>
            </div>
          ))}
        </div>

        {/* Price Summary Section */}
        <div className="border p-4">
          <h2 className="text-lg font-semibold">Price Details</h2>
          <p>Items Total: ₹{cartItems.reduce((total, item) => total + item.price * item.quantity, 0)}</p>
          <p>Discount: ₹{cartItems.reduce((total, item) => total + item.discount * item.quantity, 0)}</p>
          <p>Total Price: ₹{calculateTotal()}</p>
          <button className="w-full bg-blue-500 text-white p-2 mt-4">Proceed to Checkout</button>
        </div>

      </div>
      <Footer/>
    </div>

  );
};

export default CartPage;
