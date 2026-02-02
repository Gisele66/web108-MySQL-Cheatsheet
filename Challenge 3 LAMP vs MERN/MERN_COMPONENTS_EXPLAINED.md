# MERN Stack - Simple Explanation

## What is MERN?

MERN = **M**ongoDB + **E**xpress + **R**eact + **N**ode.js

Four tools that work together to build websites.

---

## 1. MongoDB (Database)

**What:** Stores data (like a filing cabinet)

**Where:** Runs on the server (not in browser)

**Job:** Saves and retrieves information

---

## 2. Express.js (Backend)

**What:** Handles requests from the website (waiter at a restaurant)

**Where:** Runs on the server (port 5000)

**Job:** Receives requests, talks to MongoDB, sends responses

---

## 3. React (Frontend)

**What:** What the user sees and clicks on (the website)

**Where:** Runs in the browser (port 3000)

**Job:** Shows the UI, lets user interact, asks Express for data

---

## 4. Node.js (Runtime)

**What:** JavaScript engine for the server

**Where:** Runs on the server

**Job:** Runs Express.js and handles requests

---

## Simple Flow

1. **User** clicks a button in React (browser)
2. **React** asks Express "Hey, get me some data"
3. **Express** asks MongoDB "Give me this data"
4. **MongoDB** sends the data back
5. **Express** sends it to React
6. **React** shows it on screen

---

## Quick Summary

| Part | Does What | Runs Where |
|------|-----------|-----------|
| MongoDB | Stores data | Server |
| Express | Handles requests | Server |
| React | Shows website | Browser |
| Node.js | Runs code | Server |

**That's it!** Simple as that.
