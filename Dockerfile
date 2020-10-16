### STAGE 1: Build ###
FROM node:latest AS build
WORKDIR /
COPY package.json package-lock.json ./
RUN npm install
COPY . .
RUN npm run build -- --prod

### STAGE 2: Run ###
FROM nginx:alpine
#COPY ./nginx.conf /etc/nginx/nginx.conf
RUN ls -l
COPY --from=build /dist/crowdfunding-app  /usr/share/nginx/html
