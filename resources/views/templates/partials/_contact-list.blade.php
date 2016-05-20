<div class="contact-list-container" ng-controller="contactsController as contactsVm">
	<div class="contact-list-wrapper">
		<div class="contact-list-title">
			Contact List
			(@{{ contactsVm.contacts.length }})
			<span class="pull-right">
				<span class="fa fa-caret-down" id="dropdown-icon"></span>
				<span class="fa fa-hand-grab-o"></span>
			</span>
		</div>
		<ul class="contact-categories">
			<li class="category active">
				<a href="#" ng-click="contactsVm.changeCategory($event, null)">
					All
				</a>
			</li>
			<li class="category">
				<a href="#" ng-click="contactsVm.changeCategory($event, 'recent')">
					Recent
				</a>
			</li>
			<li class="category" ng-click="contactsVm.changeCategory($event, 'followed')">
				<a href="#">
					Followed
				</a>
			</li>
		</ul>
		<div class="contact-search-container">
			{!! Form::text('contact_search', null, ['class' => 'form-control', 'ng-model' => 'contactsVm.contact_search', 'placeholder' => 'Search contact...']) !!}
		</div>
		<ul class="contact-list">
			<li class="contact" ng-repeat="contact in contactsVm.contacts | filter:contactsVm.contact_search">
				<a href="#" ng-click="contactsVm.toggleContacts($event, contact)">
					<span class="contact-thumbnail">
						<img src="{{ url('/images/bg-01.jpg') }}">
					</span>
					@{{ contact.name }}
					<span class="connectivity-status">
						
					</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="lazy-chatboxes-container" ng-show="contactsVm.toggled">
		<div class="chatbox">
			<div class="chatbox-title">
				@{{ contactsVm.currentContact.name }}
				<span class="pull-right chatbox-control chatbox-control-close" ng-click="contactsVm.closeChatbox($event)">
					<span class="fa fa-times-circle"></span>
				</span>
			</div>

			<div class="chatbox-content active" id="chatbox-content">
				<div class="conversations-container">
					<div class="conversations">
						<div class="message-container message-container-recieved">
							<div class="message message-recieved">
								<div class="message-sender-thumbnail-container">
									<img src="{{ url('/images/bg-01.jpg') }}" class="message-sender-thumbnail">
									<span class="sender-name">Admin admin</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid error distinctio maiores aliquam nesciunt quae libero porro sequi fugit a, veritatis, illo ut. Vel harum, praesentium consequuntur eum voluptatem ullam.
								</div>
								<div class="message-details text-left">
									<small class="message-details-time">
										<span class="fa fa-clock-o"></span>
										15 minutes ago
									</small>
								</div>
							</div>
						</div>{{-- /Message container --}}
						<div class="message-container message-container-sent">
							<div class="message message-sent">
								<div class="message-sender-thumbnail-container">
									<img src="{{ url('/images/bg-01.jpg') }}" class="message-sender-thumbnail">
									<span class="sender-name">Admin admin</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non atque temporibus accusantium tempora quas unde, voluptates adipisci provident? Accusantium eligendi similique distinctio est vel magnam tempora, maiores ipsum odio ducimus.
								</div>
								<div class="message-details text-left">
									<small class="message-details-time">
										<span class="fa fa-clock-o"></span>
										15 minutes ago
									</small>
								</div>
							</div>
						</div>{{-- /Message container --}}
						<div class="message-container message-container-recieved">
							<div class="message message-recieved">
								<div class="message-sender-thumbnail-container">
									<img src="{{ url('/images/bg-01.jpg') }}" class="message-sender-thumbnail">
									<span class="sender-name">Admin admin</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non atque temporibus accusantium tempora quas unde, voluptates adipisci provident? Accusantium eligendi similique distinctio est vel magnam tempora, maiores ipsum odio ducimus.
								</div>
								<div class="message-details text-left">
									<small class="message-details-time">
										<span class="fa fa-clock-o"></span>
										15 minutes ago
									</small>
								</div>
							</div>
						</div>{{-- /Message container --}}
					</div>
				</div>
				<div class="message-box-container">
					{!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Your message ... [Press Enter to send]']) !!}
				</div>
			</div>
		</div>
	</div>
</div>