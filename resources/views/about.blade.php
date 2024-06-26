<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Laravel</title>
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body{
            font-family: 'Inter', Helvetica Neue, Helvetica, Arial, sans-serif;
        }

        .main-section {
            position: relative;
            height: 70vh;
        }

        .main-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            max-width: 1200px;
            width: 100%;
            padding: 20px;
            text-align: center;
        }

        .features-section{
            position: relative;
            height: 50vh;
        }
    </style>
</head>
<body class="antialiased bg-white">
    <x-app-layout>
        @section('content')
        <!-- Hero Section -->
        <section class="hero is-fullheight section">
            <div class="hero-body">
                <div class="container">
                    <div class="columns">
                        <div class="column is-two-thirds">
                            <h1 class="mb-2" style="font-size: 2.5rem; font-weight: bold; color: black">
                                About Scriptu
                            </h1>
                            <p class="text-gray-600 is-size-4 mb-5" style="font-size: 1.4rem;">
                                Unlock Your Potential with Precision Focus
                            </p>
                            <p style="max-width: 80%; font-size: larger">Welcome to Focused Journey – your productivity companion. Stay focused, organized, and achieve your goals effortlessly. Perfect for students, professionals, and creatives alike. Say hello to efficiency, goodbye to distractions.</p>
                        </div>
                        <div class="column">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 300 225" viewBox="0 0 300 225" id="business-analysis"><g><g><path fill="none" stroke="#000" stroke-miterlimit="10" stroke-width=".316" d="M124.28,204.31c-46.28-9.34-82.09-42.33-90.04-84.04c-14.14-74.08,79.73-65.5,98.5-84.83
			C160.08,7.29,185.61,5,207.47,16.97c27.34,14.97,5.13,35.52,41.26,60.58c23.53,16.31,26.79,38.92,21.28,59.96
			c-7.83,29.86-32.77,53.73-65.31,63.66C184.35,207.38,157.14,210.94,124.28,204.31z"></path></g><g><path fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316" d="M237.86,107.25h-69.02c-1.91,0-3.45-1.54-3.45-3.45V34.25h75.92v69.54
			C241.31,105.7,239.76,107.25,237.86,107.25z"></path><path d="M237.86,25.04h-69.02c-1.91,0-3.45,1.54-3.45,3.45v5.77h75.92v-5.77C241.31,26.58,239.76,25.04,237.86,25.04z"></path><g><path fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316" d="M229.27,71.29c0,7.15-2.91,13.63-7.6,18.33l-13.25-13.25c1.3-1.3,2.11-3.09,2.11-5.07
				c0-2.06-0.88-3.93-2.28-5.24l12.81-13.68C226.11,57.1,229.27,63.83,229.27,71.29z"></path><path fill="#ff7f6e" d="M221.11,50.27L208.3,63.96c-1.28-1.2-3.01-1.94-4.9-1.94c-1.28,0-2.49,0.34-3.53,0.93l-9.22-16.33
				c3.76-2.14,8.11-3.35,12.75-3.35C210.24,43.27,216.47,45.93,221.11,50.27z"></path><path d="M199.82,65.04c-2.18,1.23-3.65,3.57-3.65,6.25h-18.75c0-9.67,5.32-18.11,13.18-22.57L199.82,65.04z"></path><path fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316" d="M221.67,89.61c-4.69,4.69-11.18,7.6-18.32,7.6c-14.29,0-25.93-11.63-25.93-25.93h18.75
				c0,3.96,3.22,7.18,7.18,7.18c1.98,0,3.77-0.81,5.07-2.11L221.67,89.61z"></path></g><g><path d="M223.22,78.99c-0.07,0-0.13-0.03-0.18-0.09c-0.07-0.1-0.04-0.23,0.05-0.3l18.09-12.66c0.04-0.03,0.08-0.04,0.12-0.04
				h22.94c0.12,0,0.22,0.1,0.22,0.22s-0.1,0.22-0.22,0.22h-22.87l-18.03,12.62C223.3,78.97,223.26,78.99,223.22,78.99z"></path></g><g><path d="M251.21,123.6h-30.1c-0.08,0-0.15-0.04-0.19-0.11l-17.76-31.93c-0.06-0.1-0.02-0.24,0.08-0.29
				c0.1-0.06,0.24-0.02,0.29,0.08l17.7,31.82h29.98c0.12,0,0.22,0.1,0.22,0.22C251.43,123.5,251.33,123.6,251.21,123.6z"></path></g><g><path d="M180.54,65.81c-0.05,0-0.11-0.02-0.15-0.06l-13.34-13.16h-26.33c-0.12,0-0.22-0.1-0.22-0.22s0.1-0.22,0.22-0.22h26.42
				c0.06,0,0.11,0.02,0.15,0.06l13.41,13.23c0.08,0.08,0.09,0.22,0,0.3C180.65,65.79,180.59,65.81,180.54,65.81z"></path></g><rect width="23.33" height="6.17" x="227.89" y="112.5" fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316"></rect><rect width="19.67" height="5.84" x="244.46" y="56.07" fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316"></rect><rect width="19.67" height="5.99" x="244.46" y="31.77" fill="#ff7f6e"></rect><rect width="20.81" height="5.93" x="139.94" y="41.99"></rect><g><path d="M213.52,53.05c-0.06,0-0.11-0.02-0.15-0.06c-0.08-0.08-0.08-0.22,0-0.3l10.64-10.62c0.04-0.04,0.1-0.06,0.15-0.06h39.97
				c0.12,0,0.22,0.1,0.22,0.22s-0.1,0.22-0.22,0.22h-39.88l-10.58,10.56C213.63,53.03,213.58,53.05,213.52,53.05z"></path></g></g><g><g><g><polygon points="43.76 211.78 42.15 211.78 45.68 161.77 49.65 161.77"></polygon></g></g><g><g><polygon points="106.23 209.05 107.83 209.05 104.85 161.77 100.88 161.77"></polygon></g></g><g><g><g><polygon fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316" points="30.87 81.1 75.96 81.1 93.21 157.88 44.12 158.34"></polygon></g></g></g><path d="M50.61,155.24c-1.71,0-3.18-1.22-3.49-2.9L34.01,83.17c-0.33-1.73-1.99-2.88-3.73-2.55c-1.73,0.33-2.88,1.99-2.55,3.73
			l13.21,70.47c0.88,4.7,4.99,8.11,9.77,8.11h56.22c2.59,0,4.69-2.1,4.69-4.69v0c0-2.69-2.26-4.83-4.94-4.69L50.61,155.24z"></path></g><g><rect width="20.42" height="27.08" x="118.47" y="176.64" fill="#fff" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".316" transform="rotate(-173.826 128.67 190.183)"></rect><g><path fill="#ff7f6e" d="M116.63,210.58l40.43-0.29l0,0c-0.02-2.21-1.22-4.25-3.16-5.32c-5.08-2.82-14.58-8.06-14.85-8.18
				c-0.35-0.17-0.82,0.12-1.16,0.48c0,0-1.4,1.58-2.74,2.19l-0.01,0c-0.36,0.16-0.78,0.32-1.26,0.46c-1.76,0.53-4.33,0.9-7.82,0.89
				c-3.91-0.01-6.57-0.9-6.93-0.91c-0.35-0.01-0.98,0.65-1.08,1.15c-0.02,0.11-0.1,0.64-0.22,1.4
				C117.45,205.12,116.63,210.58,116.63,210.58z"></path><g><path d="M133.9,199.93l11.6,7.94c0.1,0.06,0.21,0.1,0.31,0.1c0.17,0,0.34-0.08,0.45-0.24c0.17-0.25,0.11-0.59-0.14-0.76
					l-10.96-7.5C134.8,199.63,134.38,199.78,133.9,199.93z"></path></g><rect width="40.44" height="4.29" x="116.65" y="210.44" transform="matrix(-1 .00711 -.00711 -1 275.236 424.192)"></rect></g><path fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316" d="M146.55,150.41c0.3-14.87-11.62-27.29-26.65-27.37c-0.17,0-0.34,0-0.5,0c-4.21,0-8.83,0.17-13.52,0.44
			l-37.7-9.15l-0.67,22.32c-0.28,9.37,7.29,17.09,16.66,16.98c2.04-0.02,22.51,0.19,30.32,0.04c1.51-0.03,2.72,1.23,2.64,2.73
			c-0.66,12.59-3.03,37.39-3.03,37.39l26.03,1.7l6.33-43.14v0C146.53,151.69,146.56,151.04,146.55,150.41z"></path><path d="M66.18,66.34c0,0-1.55,18.28,16.99,35.97c0,0,10.92-14.29,2.86-35.43l-9.59-1.8L66.18,66.34z"></path><polygon fill="#fff" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".316" points="70.24 66.95 69.65 59.28 81.35 59.5 81.65 62.57 82.16 67.88 76.73 72.99"></polygon><path d="M76.15,42.75c-0.63-1.34-10.03-1.46-11.3-2.29c-1.14-0.74-2.23-1.29-3.48-0.91c-1.76,0.54-3.02,3.3-3.06,5.98
			c-0.04,2.39,0.16,6.05,1.09,9.22c2.57,8.78,8.9,9.39,8.9,9.39c3.07,0.02,3.59-3.08,4.43-4.17C72.72,59.97,76.78,44.1,76.15,42.75z
			"></path><path fill="#fff" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".316" d="M66.25,53.28c0.89,6.92,7.31,12.83,11.73,11.61c6.34-1.76,6.3-6.62,6.64-13.59
			c0.46-9.63-5.29-12.06-9.85-11.48C70.22,40.4,65.36,46.36,66.25,53.28z"></path><path d="M84.74,37.19c-3.15,0-7.54-3.45-13.54-3.81c-7.59-0.46-9.33,6.3-9.33,6.3s1.47,3.25,8.23,4.61
			c6.77,1.37,15.42,1.89,18.29-2.23c0,0,2.53-3.89-1.12-7.34C87.27,34.73,87.1,37.19,84.74,37.19z"></path><g><ellipse cx="67.39" cy="53.75" fill="#fff" rx="4.94" ry="3.94" transform="rotate(-86.124 67.387 53.754)"></ellipse><g><path d="M65.7,56.09c0.15,0.03,0.3-0.05,0.37-0.2c0.2-0.42,0.45-0.67,0.79-0.77c0.66-0.2,1.4,0.26,1.41,0.26
					c0.1,0.06,0.23,0.07,0.33,0.02c0.11-0.05,0.18-0.15,0.19-0.27c0.36-2.81-1.72-3.99-1.81-4.04c-0.17-0.09-0.38-0.03-0.47,0.13
					c-0.09,0.17-0.03,0.38,0.13,0.47l0,0c0.07,0.04,1.52,0.88,1.49,2.87c-0.38-0.14-0.93-0.27-1.48-0.1
					c-0.53,0.16-0.94,0.54-1.22,1.14c-0.08,0.17-0.01,0.38,0.17,0.46C65.64,56.07,65.67,56.08,65.7,56.09z"></path></g></g><rect width="19.77" height="28.39" x="103.27" y="176.68" fill="#fff" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".316" transform="rotate(-173.826 113.154 190.872)"></rect><g><path fill="#ff7f6e" d="M100.18,210.41l40.44,0.05l0,0c0-2.21-1.18-4.26-3.11-5.35c-5.06-2.87-14.51-8.18-14.78-8.31
				c-0.35-0.17-0.82,0.11-1.16,0.47c0,0-1.41,1.57-2.76,2.16l-0.01,0c-0.36,0.16-0.78,0.31-1.27,0.45
				c-1.76,0.51-4.34,0.86-7.82,0.82c-3.91-0.04-6.56-0.95-6.92-0.97c-0.35-0.01-0.99,0.64-1.09,1.14c-0.02,0.11-0.11,0.64-0.23,1.4
				C101.04,204.95,100.18,210.41,100.18,210.41z"></path><g><path d="M117.54,199.9l11.53,8.04c0.1,0.07,0.2,0.1,0.31,0.1c0.17,0,0.34-0.08,0.45-0.23c0.18-0.25,0.11-0.59-0.14-0.76
					l-10.89-7.59C118.44,199.61,118.02,199.76,117.54,199.9z"></path></g><rect width="40.44" height="4.41" x="100.18" y="210.44" transform="rotate(-180 120.396 212.643)"></rect></g><path fill="#ff7f6e" d="M93.01,67.15L93.01,67.15c8.63,1.39,9.41,2.89,11.43,7.39l17.15,38.04c1.75,4.01-2.63,9.78-6.64,11.53
			c-4.01,1.75-8.68-0.09-10.43-4.1L89.25,86.09L93.01,67.15z"></path><path fill="#fff" d="M78.28,71.87l-2.87,0.21l0.81,21.38c1.37,3.92,6.28,8.42,6.28,8.42s2.08-4.81,2.37-6.25L78.28,71.87z"></path><polygon points="84.87 66.64 79.34 73.84 76.68 71.97 81.99 66.13"></polygon><path fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316" d="M131.1,150.41c0.3-14.87-11.62-27.29-26.65-27.37c-0.17,0-0.34,0-0.5,0c-4.21,0-8.83,0.17-13.52,0.44
			l-37.7-9.15l-0.67,22.32c-0.28,9.37,7.29,17.09,16.66,16.98c2.04-0.02,22.51,0.19,30.32,0.04c1.51-0.03,2.72,1.23,2.64,2.73
			c-0.66,12.59-3.07,37.39-3.07,37.39l26.03,1.7l6.37-43.14v0C131.08,151.69,131.11,151.04,131.1,150.41z"></path><polygon points="66.18 66.45 73.64 74.32 76.68 71.97 70.14 66.06"></polygon><path fill="#ff7f6e" d="M82.16,99.51c0,0,8.91-15.36,2.72-32.87c0,0,4.52-0.57,13.26,1.61l2.16,56.33c-0.04,1.03-0.87,1.86-1.91,1.88
			l-45.96,11.26c-1.02,0.03-1.89-0.73-2-1.74l0.67-63.4c-0.25-1.88,1.01-3.63,2.87-4.01c4.1-0.82,8.55-2.16,12.22-2.25
			C66.18,66.34,72.15,90.07,82.16,99.51z"></path><path fill="#ff7f6e" d="M61.48,81.06l-14.7,34.59c-1.77,4-8.65,5.82-12.65,4.05c-4-1.77-5.82-6.44-4.05-10.45l13.86-32.67
			c3.49-7.25,6.58-8.4,12.08-7.29C56.02,69.29,64.72,71.58,61.48,81.06z"></path><g><path fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316" d="M99.17,126.21h51.08c0.53,0,1-0.34,1.17-0.84l12.59-37.66c0.27-0.8-0.33-1.63-1.17-1.63h-49.37
				c-0.53,0-1,0.34-1.17,0.84L99.17,126.21z"></path><polygon fill="#fff" stroke="#000" stroke-miterlimit="10" stroke-width=".316" points="83.38 123.25 100.16 123.25 99.17 126.21 83.38 126.21"></polygon></g><g><path fill="#fff" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".316" d="M69.81 114.42c0 0 8.3-7.7 17.2-7.88 0 0 3.91.23.95 4.46 0 0 7.04.64 9.82 4.27 2.78 3.64-.98 4.04-.98 4.04l1.9 2.67c.7.98.61 2.32-.22 3.2l-.07.07c-.6.64-1.57.76-2.3.28h0 0c.46.92.24 2.03-.54 2.7l-.03.03c-.75.65-1.83.74-2.67.22l-.34-.21.35.73c.41.85.19 1.87-.54 2.47h0c-.69.57-1.67.64-2.42.16l-.83-.52c0 0-3.48-3.7-8.5-1.75-1.15.45-2.39.62-3.62.52l-1.08-.09c-3.57-.3-6.96-1.7-9.7-4.02h0l-13.13-5.1 1.9-11.57L69.81 114.42zM87.97 111c0 0-3.75-.78-7.53.67"></path><g><path fill="#fff" d="M96.81,119.31c0,0-4.21-4.05-11.05-3.92"></path><path d="M96.8,119.51c0.06,0,0.11-0.02,0.16-0.06c0.08-0.08,0.07-0.21-0.01-0.29c-0.04-0.04-4.35-4.11-11.2-3.98
					c-0.11,0-0.2,0.09-0.2,0.21c0,0.11,0.1,0.2,0.21,0.2c6.68-0.13,10.87,3.82,10.91,3.86C96.7,119.49,96.75,119.51,96.8,119.51z"></path></g><g><path fill="#fff" d="M96.11,125.54c0,0-4.34-6.28-12.52-6.26"></path><path d="M96.1,125.74c0.04,0,0.09-0.01,0.13-0.04c0.09-0.06,0.11-0.19,0.05-0.28c-0.04-0.06-4.49-6.37-12.69-6.34
					c-0.11,0-0.2,0.09-0.2,0.2c0,0.11,0.08,0.2,0.2,0.2c7.99-0.02,12.31,6.11,12.36,6.17C95.99,125.71,96.04,125.74,96.1,125.74z"></path></g><g><path fill="#fff" d="M92.53,128.27c0,0-4.42-5.34-11.77-4.67"></path><path d="M92.52,128.47c0.05,0,0.1-0.01,0.14-0.05c0.09-0.07,0.1-0.2,0.03-0.28c-0.05-0.05-4.58-5.42-11.94-4.74
					c-0.11,0.01-0.19,0.11-0.18,0.22c0.01,0.11,0.11,0.19,0.22,0.18c7.15-0.66,11.55,4.54,11.59,4.6
					C92.41,128.45,92.47,128.47,92.52,128.47z"></path></g></g><path fill="#ff7f6e" d="M41.07,103.05c-5.11-1.19-10.22,1.98-11.41,7.09c-1.19,5.11,1.98,10.22,7.09,11.41l28.74,7.79l6.67-19.43
			L41.07,103.05z"></path><polyline fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".316" points="50.53 125.29 65.49 129.34 72.15 109.91 48.02 104.58"></polyline><line x1="51.05" x2="56.87" y1="105.22" y2="91.9" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".316"></line></g><line x1="99.71" x2="99.52" y1="109.32" y2="104.58" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width=".316"></line></g></svg>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="main-section">
            <div class="main-content" style="font-size: larger">
                <h2 class="title is-8" style="color: black; margin-bottom: 30px">Why Focus Matters</h2>
                <p>Focus is essential for productivity and success. When you concentrate your attention and efforts on a specific task or goal, you can achieve more in less time. By eliminating distractions and staying committed to your objectives, you can work with clarity and efficiency.</p>
                <p>Whether you're studying for an exam, working on a project, or pursuing personal growth, focus enables you to make meaningful progress and achieve your desired outcomes. It allows you to allocate your resources effectively, manage your time efficiently, and overcome obstacles with determination.</p>
                <br>
                <p>Furthermore, focus promotes deep engagement and immersion in your work, leading to higher levels of satisfaction and fulfillment. When you're fully absorbed in what you're doing, you experience a sense of flow—a state of heightened concentration and enjoyment that enhances your overall performance.</p>
                <p>Ultimately, mastering the art of focus is a skill that can transform your life. By cultivating mindfulness, setting clear goals, and practicing disciplined attention, you can unlock your full potential and accomplish extraordinary feats.</p>
            </div>
        </div>

        <div class="section features-section mt-16">
            <div class="container">
                <h2 class="title is-8 mb-6" style="color: black">Features of Focus App</h2>
                <div class="columns is-multiline">
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Customizable Focus Sessions</p>
                                <p>Create focus sessions tailored to your needs with adjustable durations and intervals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Visual and Auditory Cues</p>
                                <p>Stay focused with built-in cues such as ambient sounds and progress indicators.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column is-one-third">
                        <div class="card" style="border: solid 1px gray">
                            <div class="card-content">
                                <p class="title is-5">Progress Tracking</p>
                                <p>Monitor your productivity and track your progress over time with detailed analytics.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
    </x-app-layout>
    @include('components.footer')
</body>
</html>
