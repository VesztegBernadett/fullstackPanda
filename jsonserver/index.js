const bodyParser = require('body-parser')
const jsonServer = require('json-server')
const server = jsonServer.create()
const router = jsonServer.router('data/db.json')

const multer = require('multer')
const forms = multer()

const middlewares = jsonServer.defaults()

server.use(middlewares)

server.use(jsonServer.bodyParser)
server.use(forms.array())
server.use(bodyParser.urlencoded({extended: true}))

server.use(router)
server.listen(3000, () => {
    console.log('JSON Server is running')
})